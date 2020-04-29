package com.example.harsh.upload;

import android.content.Intent;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.support.v7.app.AppCompatActivity;
import android.widget.ImageView;

import com.squareup.picasso.Picasso;

/**
 * Created by tops on 17/09/2016.
 */

public class Nextpage extends AppCompatActivity {
    ImageView iv;

    @Override
    protected void onCreate(@Nullable Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.nextpage);
        iv = (ImageView)findViewById(R.id.imgnext);
        Intent i = getIntent();
        String s = i.getStringExtra("img");
        Picasso.with(Nextpage.this).load(s).into(iv);
    }
}
