package net.simplifiedlearning.volleymysqlexample;

import android.content.Context;
import android.support.v7.widget.RecyclerView;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;
import android.widget.Button;

import java.util.List;

public class RestaurantAdapter extends RecyclerView.Adapter<RestaurantAdapter.ProductViewHolder> {

    private Context mCtx;
    private List<Restaurant> restaurantList;

    public RestaurantAdapter(Context mCtx, List<Restaurant> restaurantList) {
        this.mCtx = mCtx;
        this.restaurantList = restaurantList;
    }

    @Override
    public ProductViewHolder onCreateViewHolder(ViewGroup parent, int viewType) {
        LayoutInflater inflater = LayoutInflater.from(mCtx);
        View view = inflater.inflate(R.layout.restaurants_list, null);
        return new ProductViewHolder(view);
    }

    @Override
    public void onBindViewHolder(ProductViewHolder holder, int position) {
        Restaurant restaurant = restaurantList.get(position);
        holder.textViewTitle.setText(restaurant.getName());
        holder.textViewShortDesc.setText(restaurant.getDescription());
        holder.textViewRating.setText(String.valueOf(restaurant.getGrade()));
        holder.textViewPrice.setText(String.valueOf(restaurant.getLocalization()));
        /*
        holder.ButtonMenu.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                LayoutInflater inflater = LayoutInflater.from(mCtx);
                View view = inflater.inflate(R.layout.menus_list, null);
                return new View(v);
            }
        });
         */
    }

    @Override
    public int getItemCount() {
        return restaurantList.size();
    }

    class ProductViewHolder extends RecyclerView.ViewHolder {

        TextView textViewTitle, textViewShortDesc, textViewRating, textViewPrice ;
        Button ButtonMenu;
        ImageView imageView;

        public ProductViewHolder(View itemView) {
            super(itemView);

            textViewTitle = itemView.findViewById(R.id.textViewTitle);
            textViewShortDesc = itemView.findViewById(R.id.textViewShortDesc);
            textViewRating = itemView.findViewById(R.id.textViewRating);
            textViewPrice = itemView.findViewById(R.id.textViewPrice);
            ButtonMenu = itemView.findViewById(R.id.button0);
        }
    }
}
