package com.example.myapplication;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import com.android.volley.AuthFailureError;
import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;

import org.json.JSONException;
import org.json.JSONObject;

import java.util.HashMap;
import java.util.Map;

public class CBoyLogIn extends AppCompatActivity {
    EditText ed1,ed2;
    Button b1,b2,b3;
    String s1,s2;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_cboy_log_in);

        ed1=(EditText)findViewById(R.id.cboy_uname);
        ed2=(EditText)findViewById(R.id.cboy_pass);
        b1=(Button)findViewById(R.id.cboy_login_but);
        b2=(Button)findViewById(R.id.cboy_user);
        b3=(Button)findViewById(R.id.cboy_admin);


        b1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                s1=ed1.getText().toString();
                s2=ed2.getText().toString();

                callApi();
            }
        });

        b2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent=new Intent(getApplicationContext(),UserLogIn.class);
                startActivity(intent);

            }
        });


        b3.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent=new Intent(getApplicationContext(),MainActivity.class);
                startActivity(intent);
            }
        });


    }

    private void callApi() {


        StringRequest stringRequest = new StringRequest(Request.Method.POST, "http://192.168.31.79/smartbin/web/boylogin_api.php",
                new Response.Listener<String>() {
                    @Override
                    public void onResponse(String response) {
                        try {
                            JSONObject jsonObject = new JSONObject(response);
                            String resfromserver = jsonObject.getString("status");
                            if (resfromserver.equals("success")) {

//                                Toast.makeText(getApplicationContext(), "Succesfully Registered " + resfromserver, Toast.LENGTH_LONG).show();


                                Intent intent=new Intent(getApplicationContext(),AdminView.class);
                                startActivity(intent);


                            } else {
                                Toast.makeText(getApplicationContext(), "Error " + resfromserver, Toast.LENGTH_LONG).show();
                            }
                        } catch (JSONException ob) {
                            Toast.makeText(getApplicationContext(), "Exception  " + ob, Toast.LENGTH_LONG).show();
                        }

                    }
                },
                new Response.ErrorListener() {
                    @Override
                    public void onErrorResponse(VolleyError error) {

                    }
                })

        {
            @Override
            protected Map<String, String> getParams() throws AuthFailureError {

                Map<String,String> params = new HashMap<String, String>();
                params.put("Username",s1);
                params.put("password",s2);


                return params;

            }
        }
                ;

        RequestQueue requestQueue = Volley.newRequestQueue(this);
        requestQueue.add(stringRequest);






    }
}
