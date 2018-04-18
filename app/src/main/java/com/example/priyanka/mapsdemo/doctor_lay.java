package com.example.priyanka.mapsdemo;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;

/**
 * Created by User on 26-Mar-18.
 */

public class doctor_lay extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.doctor_lay);
    }


    public void onClick(View view) {

        Intent intent2=new Intent(doctor_lay.this,MapsActivity.class);
        startActivity(intent2);
    }
}
