package net.simplifiedlearning.volleymysqlexample;

import android.content.Context;
import android.support.v7.widget.RecyclerView;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;

import android.widget.Button;
import android.view.View;

import java.util.List;


public class MenuAdapter extends RecyclerView.Adapter<MenuAdapter.ProductViewHolder> {


    private Context mCtx;
    private List<Menu> menuList;

    public MenuAdapter (Context mCtx, List<Menu> menuList) {
        this.mCtx = mCtx;
        this.menuList = menuList;
    }

    @Override
    public ProductViewHolder onCreateViewHolder(ViewGroup parent, int viewType) {
        LayoutInflater inflater = LayoutInflater.from(mCtx);
        View view = inflater.inflate(R.layout.menus_list, null);
        return new ProductViewHolder(view);
    }

    @Override
    public void onBindViewHolder(ProductViewHolder holder, int position) {
        Menu menu = menuList.get(position);
        holder.textViewTitle.setText(menu.getName());
        holder.textViewShortDesc.setText(menu.getDescription());
        holder.textViewRating.setText(String.valueOf(menu.getPrice()));
        holder.textViewPrice.setText(String.valueOf(menu.getRestoid()));
    }

    @Override
    public int getItemCount() {
        return menuList.size();
    }

    class ProductViewHolder extends RecyclerView.ViewHolder {

        TextView textViewTitle, textViewShortDesc, textViewRating, textViewPrice;

        public ProductViewHolder(View itemView) {
            super(itemView);

            textViewTitle = itemView.findViewById(R.id.textViewTitle);
            textViewShortDesc = itemView.findViewById(R.id.textViewShortDesc);
            textViewRating = itemView.findViewById(R.id.textViewRating);
            textViewPrice = itemView.findViewById(R.id.textViewPrice);
        }
    }
}
