package net.simplifiedlearning.volleymysqlexample;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.LinearLayoutManager;
import android.support.v7.widget.RecyclerView;

import com.android.volley.Request;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;
import java.util.List;

import android.widget.Button;
import android.view.View;
import android.widget.Toast;


public class MainActivity extends AppCompatActivity {

    //this is the JSON Data URL
    //make sure you are using the correct ip else it will not work
    private static final String URL_RESTAURANTS = "http://ef2e34b2.ngrok.io/ApiRestPass/public/api/restaurants";
    private static final String URL_MENUS = "http://ef2e34b2.ngrok.io/ApiRestPass/public/api/restaurant/1/menus";
    private Button mButton;


    //a list to store all the products
    List<Menu> menuList;
    List<Restaurant> restaurantList;

    //the recyclerview
    RecyclerView recyclerView;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);


        //getting the recyclerview from xml
        recyclerView = findViewById(R.id.recylcerView);
        recyclerView.setHasFixedSize(true);
        recyclerView.setLayoutManager(new LinearLayoutManager(this));

        //initializing the productlist
        menuList = new ArrayList<>();
        restaurantList = new ArrayList<>();


        //this method will fetch and parse json
        //to display it in recyclerview
        loadRestaurants();
        //loadMenus();
/*
        mButton = findViewById(R.id.button);
        mButton.setOnClickListener(new recyclerView.OnClickListener() {
            @Override
            public void onClick(View view)
            {
                loadMenus();
            }
        });
*/

    }

    private void loadMenus() {

        /*
         * Creating a String Request
         * The request type is GET defined by first parameter
         * The URL is defined in the second parameter
         * Then we have a Response Listener and a Error Listener
         * In response listener we will get the JSON response as a String
         * */
        StringRequest stringRequest = new StringRequest(Request.Method.GET, URL_MENUS,
                new Response.Listener<String>() {
                    @Override
                    public void onResponse(String response) {
                        try {
                            //converting the string to json array object
                            JSONArray array = new JSONArray(response);

                            //traversing through all the object
                            for (int i = 0; i < array.length(); i++) {

                                //getting product object from json array
                                JSONObject men = array.getJSONObject(i);

                                //adding the product to product list
                                menuList.add(new Menu(
                                        men.getInt("id"),
                                        men.getString("name"),
                                        men.getString("description"),
                                        men.getDouble("price"),
                                        men.getInt("resto_id")
                                ));
                            }

                            //creating adapter object and setting it to recyclerview
                            MenuAdapter adapter = new MenuAdapter(MainActivity.this, menuList);
                            recyclerView.setAdapter(adapter);
                        } catch (JSONException e) {
                            e.printStackTrace();
                        }
                    }
                },
                new Response.ErrorListener() {
                    @Override
                    public void onErrorResponse(VolleyError error) {

                    }
                });

        //adding our stringrequest to queue
        Volley.newRequestQueue(this).add(stringRequest);

    }

    private void loadRestaurants() {

        /*
         * Creating a String Request
         * The request type is GET defined by first parameter
         * The URL is defined in the second parameter
         * Then we have a Response Listener and a Error Listener
         * In response listener we will get the JSON response as a String
         * */
        StringRequest stringRequest = new StringRequest(Request.Method.GET, URL_RESTAURANTS,
                new Response.Listener<String>() {
                    @Override
                    public void onResponse(String response) {
                        try {
                            //converting the string to json array object
                            JSONArray array = new JSONArray(response);

                            //traversing through all the object
                            for (int i = 0; i < array.length(); i++) {

                                //getting product object from json array
                                JSONObject restau = array.getJSONObject(i);

                                //adding the product to product list
                                restaurantList.add(new Restaurant(
                                        restau.getInt("id"),
                                        restau.getString("name"),
                                        restau.getString("description"),
                                        restau.getDouble("grade"),
                                        restau.getString("localization"),
                                        restau.getString("phone_number"),
                                        restau.getString("website")
                                ));
                            }

                            //creating adapter object and setting it to recyclerview
                            RestaurantAdapter adapter = new RestaurantAdapter(MainActivity.this, restaurantList);
                            recyclerView.setAdapter(adapter);
                        } catch (JSONException e) {
                            e.printStackTrace();
                        }
                    }
                },
                new Response.ErrorListener() {
                    @Override
                    public void onErrorResponse(VolleyError error) {

                    }

                   /* @Override
                    public void onClick(View view, int position) {
                        Toast.makeText(MainActivity.this,  .get(position).get(), Toast.LENGTH_SHORT).show();
                    }

                    */
                });

        //adding our stringrequest to queue
        Volley.newRequestQueue(this).add(stringRequest);
    }

}
