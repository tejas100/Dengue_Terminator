package com.example.priyanka.mapsdemo;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;

/**
 * Created by Tejas on 3/31/2018.
 */

public class flash_screen extends AppCompatActivity {
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.first_call);
    }

    public void enter(View view) {
        Intent intent=new Intent(flash_screen.this,MapsActivity.class);
        startActivity(intent);

    }
}
