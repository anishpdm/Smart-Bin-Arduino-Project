package com.example.myapplication;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.ImageView;

public class CBoyView extends AppCompatActivity {





    ImageView iv,iv2,iv3,iv4,iv5;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_cboy_view);

        iv=(ImageView)findViewById(R.id.vg);
        iv3=(ImageView)findViewById(R.id.pend);

        iv2=(ImageView)findViewById(R.id.logout);

        iv4=(ImageView)findViewById(R.id.VRoute);
        iv5=(ImageView)findViewById(R.id.Vmap);



        iv4.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent i=new Intent(getApplicationContext(),RouteView.class);
                startActivity(i);
            }
        });


        iv5.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent i=new Intent(getApplicationContext(),BinMap.class);
                startActivity(i);
            }
        });



        iv3.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent i=new Intent(getApplicationContext(),ViewRequests.class);
                startActivity(i);
            }
        });


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
