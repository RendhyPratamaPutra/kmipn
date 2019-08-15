package com.example.bersihnesia.fragment;


import android.Manifest;
import android.app.Activity;
import android.content.Context;
import android.content.pm.PackageManager;
import android.location.Location;
import android.location.LocationListener;
import android.location.LocationManager;
import android.os.Bundle;
import android.support.v4.app.ActivityCompat;
import android.support.v4.app.Fragment;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;

import com.example.bersihnesia.R;
import com.synnapps.carouselview.CarouselView;
import com.synnapps.carouselview.ImageListener;

/**
 * A simple {@link Fragment} subclass.
 */
public class HomeFragment extends Fragment implements LocationListener {


    public HomeFragment() {
        // Required empty public constructor
    }

    private int[] mImage = new int[]{
            R.drawable.ic_banner, R.drawable.ic_banner
    };

    private String[] mImagesTitle = new String[]{
            "Banner Ads", "Banner Ads 2"
    };

    private LocationManager locationManager;

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        View view = inflater.inflate(R.layout.fragment_home, container, false);
        CarouselView carouselView = view.findViewById(R.id.slideImage);
        carouselView.setPageCount(mImage.length);
        locationManager = (LocationManager) getActivity().getSystemService(Context.LOCATION_SERVICE);
        boolean permissionGranted = ActivityCompat.checkSelfPermission(getActivity(), Manifest.permission.ACCESS_FINE_LOCATION) == PackageManager.PERMISSION_GRANTED;

        if(permissionGranted) {
            Location location = locationManager.getLastKnownLocation(locationManager.NETWORK_PROVIDER);
            onLocationChanged(location);
        } else {
            ActivityCompat.requestPermissions(getActivity(), new String[]{Manifest.permission.ACCESS_FINE_LOCATION}, 200);
        }



        carouselView.setImageListener(new ImageListener() {
            @Override
            public void setImageForPosition(int position, ImageView imageView) {
                imageView.setImageResource(mImage[position]);
            }
        });
        return view;
    }

    @Override
    public void onLocationChanged(Location location) {

        double latiounde = location.getLatitude();
        double asd = location.getLongitude();

        Location loc1 = new Location("");
        loc1.setLatitude(latiounde);
        loc1.setLongitude(asd);

        Location loc2 = new Location("");
        loc2.setLatitude(-8.174230);
        loc2.setLongitude(113.718665);

        float distanceInMeters = loc1.distanceTo(loc2);

        String tes = String.valueOf(distanceInMeters * 0.001);
        Log.e("RAG", "onCreateView: "+tes );

    }

    @Override
    public void onStatusChanged(String provider, int status, Bundle extras) {

    }

    @Override
    public void onProviderEnabled(String provider) {

    }

    @Override
    public void onProviderDisabled(String provider) {

    }
}
