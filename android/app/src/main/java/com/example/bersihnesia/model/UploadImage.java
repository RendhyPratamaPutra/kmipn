package com.example.bersihnesia.model;

import com.google.gson.annotations.SerializedName;

public class UploadImage {
    // variable name should be same as in the json response from php
    @SerializedName("success")
    boolean success;
    @SerializedName("message")
    String message;

    public String getMessage() {
        return message;
    }

    public boolean getSuccess() {
        return success;
    }

}
