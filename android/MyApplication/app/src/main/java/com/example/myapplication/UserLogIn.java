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

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.HashMap;
import java.util.Map;

public class UserLogIn extends AppCompatActivity {
EditText ed1,ed2;
Button b1,b2,b3,b4;
String s1,s2;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_user_log_in);
        ed1=(EditText)findViewById(R.id.loginuser);
        ed2=(EditText)findViewById(R.id.loginpass);
        b1=(Button)findViewById(R.id.loginbut);
        b2=(Button)findViewById(R.id.adminlogin);
        b3=(Button)findViewById(R.id.boylogin);
        b4=(Button)findViewById(R.id.newreg);

        b4.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent=new Intent(getApplicationContext(),UserRegistration.class);
                startActivity(intent);
            }
        });


        b1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                s1=ed1.getText().toString();
                s2=ed2.getText().toString();

callApi();


            }
        });

        b3.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent=new Intent(getApplicationContext(),CBoyLogIn.class);
                startActivity(intent);

            }
        });


        b2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent=new Intent(getApplicationContext(),MainActivity.class);
                startActivity(intent);
            }
        });



    }

    private void callApi() {

        StringRequest stringRequest = new StringRequest(Request.Method.POST, Constants.ip+"userlogin_api.php",
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
                params.put("email",s1);
                params.put("password",s2);


                return params;

            }
        }
                ;

        RequestQueue requestQueue = Volley.newRequestQueue(this);
        requestQueue.add(stringRequest);




    }
}
