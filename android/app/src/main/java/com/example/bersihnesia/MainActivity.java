package com.example.bersihnesia;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;

import com.example.bersihnesia.activity.CommunityActivity;
import com.example.bersihnesia.activity.CreateCommunityActivity;
import com.example.bersihnesia.activity.DetailCommuntiyActivity;
import com.example.bersihnesia.activity.DrawTrashActivity;
import com.example.bersihnesia.activity.HomeActivity;
import com.example.bersihnesia.activity.InformationActivity;
import com.example.bersihnesia.activity.LoginActivity;
import com.example.bersihnesia.activity.PdfActivity;
import com.example.bersihnesia.activity.RegisterActivity;
import com.example.bersihnesia.fragment.CommunityFragment;

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
        Intent intent = new Intent(MainActivity.this, CommunityActivity.class);
        startActivity(intent);
    }
    public void information(View view){
        Intent intent=new Intent(MainActivity.this,InformationActivity.class);
        startActivity(intent);
    }

    public void tab(View view) {
        Intent intent = new Intent(MainActivity.this,DetailCommuntiyActivity.class);
        startActivity(intent);
    }

    public void daftar(View view) {
        Intent intent=new Intent(MainActivity.this,RegisterActivity.class);
        startActivity(intent);
    }

    public void buat(View view) {
        Intent intent=new Intent(MainActivity.this,CreateCommunityActivity.class);
        startActivity(intent);
    }
}
