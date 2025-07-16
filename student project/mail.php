
fahim hossain <amiislam577@gmail.com>
12:18 (0 minutes ago)
to me

import java.io.*;
import java.util.*;

class Student {
    String id, name, email;

    Student(String id, String name, String email) {
        if (id.length() > 5) {
            throw new IllegalArgumentException("ID must be max 5 characters.");
        }
        if (!email.contains("@") || !email.contains(".")) {
            throw new IllegalArgumentException("Invalid email format.");
        }

        this.id = id;
        this.name = name;
        this.email = email;
    }

    void result(String searchId) {
        try (BufferedReader br = new BufferedReader(new FileReader("results.txt"))) {
            String line;
            boolean found = false;
            while ((line = br.readLine()) != null) {
                String[] parts = line.split(",");
                if (parts[0].equals(searchId)) {
                    System.out.println("Result for ID " + searchId + ": " + parts[1]);
                    found = true;
                    break;
                }
            }
            if (!found) {
                System.out.println("ID not found in result file.");
            }
        } catch (IOException e) {
            System.out.println("Error reading result file.");
        }
    }

    public static void main(String[] args) {
        Student s1 = new Student("12345", "Rahul", "rahul@example.com");
        s1.result("12345");
    }
}