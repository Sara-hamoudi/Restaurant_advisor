package net.simplifiedlearning.volleymysqlexample;


public class Restaurant {
    private int id;
    private String name;
    private String description;
    private double grade;
    private String localization;
    private String phone_number;
    private String website;

    public Restaurant(int id, String name, String description, double grade, String localization, String phone_number, String website) {
        this.id = id;
        this.name = name;
        this.description = description;
        this.grade = grade;
        this.localization = localization;
        this.phone_number = phone_number;
        this.website = website;
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

    public double getGrade() {
        return grade;
    }

    public String getLocalization() {
        return localization;
    }

    public String getPhone_number() {
        return phone_number;
    }

    public String getWebsite() {
        return website;
    }
}
