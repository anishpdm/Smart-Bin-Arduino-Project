package com.example.myapplication;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;
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

public class ViewRequests extends AppCompatActivity {

    Button acceptBut;
    TextView binName;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_view_requests);

        acceptBut=(Button)findViewById(R.id.acceptbut);
        binName=(TextView)findViewById(R.id.binname);


        loadRequests();

        acceptBut.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                ReplyTo();

            }


        });




    }




    private void loadRequests() {


        StringRequest stringRequest = new StringRequest(Request.Method.GET, Constants.ip+"getAccept.php",
                new Response.Listener<String>() {
                    @Override
                    public void onResponse(String response) {
                        try {
                            JSONObject jsonObject = new JSONObject(response);
                            String resfromserver = jsonObject.getString("status");
                            if (resfromserver.equals("success")) {

//                                Toast.makeText(getApplicationContext(), "Succesfully Registered " + resfromserver, Toast.LENGTH_LONG).show();

                                acceptBut.setVisibility(View.VISIBLE);
                                binName.setVisibility(View.VISIBLE);



                                JSONArray jsonArray = jsonObject.getJSONArray("datas");
                                for (int i = 0; i < jsonArray.length(); i++) {
                                    JSONObject object = jsonArray.getJSONObject(i);
                                    String location = object.getString("location").trim();

                                    binName.setText(""+location);


                                }


                            } else {
                                Toast.makeText(getApplicationContext(), " " + resfromserver, Toast.LENGTH_LONG).show();
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


                ;

        RequestQueue requestQueue = Volley.newRequestQueue(this);
        requestQueue.add(stringRequest);








    }



    //////////


    private void ReplyTo() {





        StringRequest stringRequest = new StringRequest(Request.Method.POST, Constants.ip+"AcceptRequest.php",
                new Response.Listener<String>() {
                    @Override
                    public void onResponse(String response) {
                        try {
                            JSONObject jsonObject = new JSONObject(response);
                            String resfromserver = jsonObject.getString("status");
                            if (resfromserver.equals("success")) {

                                Toast.makeText(getApplicationContext(), "Succesfully Accepted the Request " , Toast.LENGTH_LONG).show();

Intent i=new Intent(getApplicationContext(), CBoyView.class);
startActivity(i);


                            } else {
                                Toast.makeText(getApplicationContext(), "Error happened " + resfromserver, Toast.LENGTH_LONG).show();
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


                ;

        RequestQueue requestQueue = Volley.newRequestQueue(this);
        requestQueue.add(stringRequest);








    }



}
