package com.example.priyanka.mapsdemo;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;

/**
 * Created by Tejas on 3/23/2018.
 */

public class doctor extends AppCompatActivity {

    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.hospital);
    }

    public void submit(View view) {

        Intent intent2=new Intent(doctor.this,MapsActivity.class);
        startActivity(intent2);
    }
}
