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

public class UserRegistration extends AppCompatActivity {



    EditText ed1,ed2,ed3,ed4;
    Button b1,b2,b3;
    String s1,s2,s3,s4;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_user_registration);

        ed1=(EditText)findViewById(R.id.userreg_name);
        ed2=(EditText)findViewById(R.id.userreg_email);
        ed3=(EditText)findViewById(R.id.userreg_pass);
        ed4=(EditText)findViewById(R.id.userreg_mobile);

        b1=(Button)findViewById(R.id.userreg_regbutton);

        b2=(Button)findViewById(R.id.userreg_adminlogin);

        b3=(Button)findViewById(R.id.userreg_clean);

        b3.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                Intent intent=new Intent(getApplicationContext(),CBoyLogIn.class);
                startActivity(intent);

            }
        });


        b1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                s1=ed1.getText().toString();
                s2=ed2.getText().toString();
                s3=ed3.getText().toString();
                s4=ed4.getText().toString();

                callAPI();

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

    private void callAPI() {

        StringRequest stringRequest = new StringRequest(Request.Method.POST, "http://192.168.31.79/smartbin/web/userreg_api.php",
                new Response.Listener<String>() {
                    @Override
                    public void onResponse(String response) {
                        try {
                            JSONObject jsonObject = new JSONObject(response);
                            String resfromserver = jsonObject.getString("status");
                            if (resfromserver.equals("success")) {

            Toast.makeText(getApplicationContext(), "Succesfully Registered " + resfromserver, Toast.LENGTH_LONG).show();

                                Intent intent=new Intent(getApplicationContext(),UserLogIn.class);
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
                params.put("name",s1);
                params.put("email",s2);
                params.put("mobile",s4);

                params.put("password",s3);



                return params;

            }
        }
                ;

        RequestQueue requestQueue = Volley.newRequestQueue(this);
        requestQueue.add(stringRequest);




    }
}
