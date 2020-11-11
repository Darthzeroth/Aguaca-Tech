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
import android.widget.Toast;

import androidx.annotation.NonNull;
import androidx.fragment.app.Fragment;

import com.google.android.material.textfield.TextInputEditText;
import com.macpaul.aguacatech.MainActivity;
import com.macpaul.aguacatech.R;

public class ProdEmpFragment extends Fragment {
    WebView myWebViewdash;

    @Override
    public void onSaveInstanceState(Bundle bundle) {
        myWebViewdash.saveState(bundle);
    }

    public View onCreateView(@NonNull LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState) {
        View root = inflater.inflate(R.layout.fragment_dashboard, container, false);

        myWebViewdash = root.findViewById(R.id.webdash);
        WebSettings webSettings = myWebViewdash.getSettings();
        webSettings.setJavaScriptEnabled(true);
        myWebViewdash.setWebViewClient(new WebViewClient());

        if (savedInstanceState != null) {
            myWebViewdash.restoreState(savedInstanceState);
        } else {
            myWebViewdash.loadUrl("https://demowmx.com/aguacatech/app/promocion.html");
        }

        if (!MainActivity.token_sesion) { //si no existe token de inicio de sesión
            View alertLayout = inflater.inflate(R.layout.layout_custom_dialog, null);
            final TextInputEditText etUsername = alertLayout.findViewById(R.id.tiet_username);
            final TextInputEditText etPassword = alertLayout.findViewById(R.id.tiet_password);
            AlertDialog.Builder alert = new AlertDialog.Builder(this.getContext());
            alert.setTitle("Inicio de sesión");
            alert.setMessage("Para ver ofertas de empleo y productos, primero debes iniciar sesión");
            alert.setView(alertLayout);
            alert.setCancelable(false);
            alert.setNegativeButton("Cancelar", new DialogInterface.OnClickListener() {
                @Override
                public void onClick(DialogInterface dialog, int which) {
                    //findViewById(R.menu.bottom_nav_menu);
                    View myView = myWebViewdash.getRootView().findViewById(R.id.navigation_home);
                    myView.performClick();

                    Toast.makeText(myWebViewdash.getContext(), "Volviendo a sección anterior", Toast.LENGTH_SHORT).show();
                }
            });
            alert.setPositiveButton("Continuar", new DialogInterface.OnClickListener() {
                @Override
                public void onClick(DialogInterface dialog, int which) {
                    String user = etUsername.getText().toString();
                    String pass = etPassword.getText().toString();
                    Toast.makeText(myWebViewdash.getContext(), "Inicio de sesión correcto", Toast.LENGTH_SHORT).show();
                    MainActivity.token_sesion=true;
                }
            });
            AlertDialog dialog = alert.create();
            dialog.show();
        }

        return root;
    }
}