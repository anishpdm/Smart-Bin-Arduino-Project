package com.example.myapplication;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.ImageView;

public class AdminView extends AppCompatActivity {


    ImageView iv,iv2,iv3,iv4;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_admin_view);
        iv=(ImageView)findViewById(R.id.vg);
        iv3=(ImageView)findViewById(R.id.VRoute);
        iv4=(ImageView)findViewById(R.id.Vmap);

        iv3.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent i=new Intent(getApplicationContext(),RouteView.class);
                startActivity(i);

            }
        });



        iv4.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                Intent i=new Intent(getApplicationContext(),BinMap.class);
                startActivity(i);


            }
        });

        iv2=(ImageView)findViewById(R.id.logout);
        iv2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent i=new Intent(getApplicationContext(),MainActivity.class);
                startActivity(i);
            }
        });

        iv.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent i=new Intent(getApplicationContext(),ViewGraph.class);
                startActivity(i);
            }
        });
    }
}
