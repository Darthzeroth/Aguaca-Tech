package com.macpaul.aguacatech.ui;

import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.webkit.WebSettings;
import android.webkit.WebView;
import android.webkit.WebViewClient;
import android.widget.TextView;

import androidx.annotation.Nullable;
import androidx.annotation.NonNull;
import androidx.fragment.app.Fragment;
import androidx.lifecycle.Observer;
import androidx.lifecycle.ViewModelProviders;

import com.macpaul.aguacatech.R;

public class InfoFragment extends Fragment {
    WebView myWebViewhome;
    private Bundle webViewBundle;

    @Override
    public void onSaveInstanceState(Bundle bundle) {
        //myWebViewhome.saveState(bundle);
    }

    public View onCreateView(@NonNull LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState) {
        View root = inflater.inflate(R.layout.fragment_home, container, false);

        myWebViewhome = root.findViewById(R.id.webhome);
        WebSettings webSettings = myWebViewhome.getSettings();
        webSettings.setJavaScriptEnabled(true);
        myWebViewhome.setWebViewClient(new WebViewClient());

        if (webViewBundle != null) {
            myWebViewhome.restoreState(webViewBundle);
        } else {
            myWebViewhome.loadUrl("https://demowmx.com/aguacatech/");
        }

        return root;
    }

    @Override
    public void onPause() {
        super.onPause();

        webViewBundle = new Bundle();
        myWebViewhome.saveState(webViewBundle);
    }
}