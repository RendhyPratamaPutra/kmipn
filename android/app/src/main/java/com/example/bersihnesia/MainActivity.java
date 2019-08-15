package com.example.bersihnesia;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;

import com.example.bersihnesia.activity.DrawTrashActivity;
import com.example.bersihnesia.activity.HomeActivity;
import com.example.bersihnesia.activity.LoginActivity;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }

    public void login(View view) {
        Intent intent = new Intent(MainActivity.this, HomeActivity.class);
        startActivity(intent);
    }

    public void asd(View view) {
        Intent intent = new Intent(MainActivity.this, DrawTrashActivity.class);
        startActivity(intent);
    }
}
