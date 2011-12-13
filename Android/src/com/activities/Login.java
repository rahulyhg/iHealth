package com.activities;

import org.json.JSONException;
import org.json.JSONObject;

import ihealth.webservice.RestJsonClient;
import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.Button;
import android.widget.TextView;

/** Welcome + Login */
public class Login extends iHealthSuperActivity {

	private static final String TAG = "Login";
	
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		// TODO Auto-generated method stub
		super.onCreate(savedInstanceState);
		setContentView(R.layout.login);
		
		Button doLogin = (Button) findViewById(R.id.login_button);
		doLogin.setOnClickListener(new OnClickListener() {
			
			@Override
			public void onClick(View v) {
				Log.d(TAG, "click button : login");
				
				JSONObject jObject = RestJsonClient.loginPOST("christian", "qwertz");
				Log.d(TAG, "Empfangen: " + jObject.toString());
				String statuscode = "";
				String statusmessage = "";
				
				try {
					statuscode = jObject.get("statuscode").toString();
					statusmessage = jObject.get("statusmessage").toString();
					Log.d(TAG, "statuscode = "+ statuscode);
				} catch (JSONException e) {
					// TODO Auto-generated catch block
					e.printStackTrace();
				}
				
				Log.d(TAG, statusmessage);
				
				if (new Integer(statuscode).intValue() == 200) {
					
				} else {
					/* TODO noch statuscode 100, wenn ge�ndert dann methode nach oben verschieben */
					Intent intent = new Intent(Login.this, MainMenu.class);
					startActivity(intent);
				}
				
				
			}
		});
		
		setFontSegoeWPLight((TextView) findViewById(R.id.login_headline));
		setFontSegoeWPLight((TextView) findViewById(R.id.login_username_info));
		setFontSegoeWPLight((TextView) findViewById(R.id.login_password_info));
	}
}
