package com.example.bersihnesia.apihelper;

import okhttp3.ResponseBody;
import retrofit2.Call;
import retrofit2.http.GET;
import retrofit2.http.Path;
import retrofit2.http.Query;

public interface BaseApiService {

    @GET("api/list_event")
    Call<ResponseBody> getEvent();

    @GET("api/list_event/data/{id_event}")
    Call<ResponseBody> getEventDetail(@Path("movie_id") Integer id_event);

}
