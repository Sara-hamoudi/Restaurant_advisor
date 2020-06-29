package net.simplifiedlearning.volleymysqlexample;

public class Menu {
    private int id;
    private String name;
    private String description;
    private double price;
    private int resto_id;

    public Menu(int id, String name, String description, double price, Integer resto_id) {
        this.id = id;
        this.name = name;
        this.description = description;
        this.price = price;
        this.resto_id = resto_id;
    }
    public int getId() {
        return id;
    }

    public String getName() {
        return name;
    }

    public String getDescription() {
        return description;
    }

    public double getPrice() {
        return price;
    }

    public int getRestoid() { return resto_id; }
}
