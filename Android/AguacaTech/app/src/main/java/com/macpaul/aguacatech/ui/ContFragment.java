package com.macpaul.aguacatech.ui;

import android.app.AlertDialog;
import android.content.DialogInterface;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.webkit.WebSettings;
import android.webkit.WebView;
import android.webkit.WebViewClient;
import android.widget.TextView;
import android.widget.Toast;

import androidx.annotation.Nullable;
import androidx.annotation.NonNull;
import androidx.fragment.app.Fragment;
import androidx.lifecycle.Observer;
import androidx.lifecycle.ViewModelProviders;

import com.google.android.material.textfield.TextInputEditText;
import com.macpaul.aguacatech.MainActivity;
import com.macpaul.aguacatech.R;

public class ContFragment extends Fragment {
    WebView myWebViewnoti;

    @Override
    public void onSaveInstanceState(Bundle bundle) {
        myWebViewnoti.saveState(bundle);
    }

    public View onCreateView(@NonNull LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState) {
        View root = inflater.inflate(R.layout.fragment_notifications, container, false);

        myWebViewnoti = root.findViewById(R.id.webnoti);
        WebSettings webSettings = myWebViewnoti.getSettings();
        webSettings.setJavaScriptEnabled(true);
        myWebViewnoti.setWebViewClient(new WebViewClient());

        if (savedInstanceState != null) {
            myWebViewnoti.restoreState(savedInstanceState);
        } else {
            myWebViewnoti.loadUrl("https://demowmx.com/aguacatech/app/productores.html");
        }

        if (!MainActivity.token_sesion) { //si no existe token de inicio de sesión
            View alertLayout = inflater.inflate(R.layout.layout_custom_dialog, null);
            final TextInputEditText etUsername = alertLayout.findViewById(R.id.tiet_username);
            final TextInputEditText etPassword = alertLayout.findViewById(R.id.tiet_password);
            AlertDialog.Builder alert = new AlertDialog.Builder(this.getContext());
            alert.setTitle("Inicio de sesión");
            alert.setMessage("Para acceder a tus publicaciones y mensajes, primero debes iniciar sesión");
            alert.setView(alertLayout);
            alert.setCancelable(false);
            alert.setNegativeButton("Cancelar", new DialogInterface.OnClickListener() {
                @Override
                public void onClick(DialogInterface dialog, int which) {
                    //findViewById(R.menu.bottom_nav_menu);
                    View myView = myWebViewnoti.getRootView().findViewById(R.id.navigation_home);
                    myView.performClick();

                    Toast.makeText(myWebViewnoti.getContext(), "Volviendo a sección anterior", Toast.LENGTH_SHORT).show();
                }
            });
            alert.setPositiveButton("Continuar", new DialogInterface.OnClickListener() {
                @Override
                public void onClick(DialogInterface dialog, int which) {
                    String user = etUsername.getText().toString();
                    String pass = etPassword.getText().toString();
                    Toast.makeText(myWebViewnoti.getContext(), "Inicio de sesión correcto", Toast.LENGTH_SHORT).show();
                    MainActivity.token_sesion=true;
                }
            });
            AlertDialog dialog = alert.create();
            dialog.show();
        }

        return root;
    }
}