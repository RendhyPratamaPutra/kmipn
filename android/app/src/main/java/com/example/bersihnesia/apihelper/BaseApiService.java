package com.example.bersihnesia.apihelper;

import okhttp3.ResponseBody;
import retrofit2.Call;
import retrofit2.http.GET;
import retrofit2.http.Path;
import retrofit2.http.Query;

public interface BaseApiService {

    @GET("movie/popular")
    Call<ResponseBody> getUpcoming(@Query("api_key") String api_key,
                                   @Query("language") String language,
                                   @Query("page") String page);

    @GET("movie/{movie_id}")
    Call<ResponseBody> getDetail(@Path("movie_id") Integer movie_id,
                                 @Query("api_key") String api_key,
                                 @Query("language") String language);

    @GET("tv/popular")
    Call<ResponseBody> getPopular(@Query("api_key") String api_key,
                                  @Query("language") String language,
                                  @Query("page") String page);

    @GET("tv/{tv_id}")
    Call<ResponseBody> getDetailTV(@Path("tv_id") Integer tv_id,
                                   @Query("api_key") String api_key,
                                   @Query("language") String language);

    @GET("search/{search}")
    Call<ResponseBody> getSearch(@Path("search") String search,
                                 @Query("api_key") String api_key,
                                 @Query("language") String language,
                                 @Query("query") String query);

    @GET("movie/upcoming")
    Call<ResponseBody> getUpcomingAll(@Query("api_key") String api_key,
                                      @Query("language") String language);

}
