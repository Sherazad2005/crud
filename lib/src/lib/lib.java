package lib;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.*;
import java.util.Scanner;
public class lib {
    private static final String url = "jdbc:mysql://localhost:3306/crud";
    private static final String user = "root";
    private static final String mdp= "";

    public static void main(String[] args) {
        try {
            Class.forName("com.mysql.cj.jdbc.Driver");
            Connection connection = DriverManager.getConnection(url, user, mdp);

            Scanner scanner = new Scanner(System.in);

            while (true) {
                System.out.println("Pour ce connecter tapez 1.");
                System.out.println("Pour revenir sur le menu principale tapez 2");

                int choice = scanner.nextInt();
                scanner.nextLine();

                switch (choice) {
                    case 1:
                        login(connection, scanner);
                        break;
                    case 2:
                        System.out.println("Menu principal");
                        System.exit(0);
                    default:
                        System.out.println("Erreur ! Tapez 1 pour ce connecter  ou tapez 2 pour revenir sur le menu principale.");
                }
            }

        } catch (ClassNotFoundException | SQLException e) {
            e.printStackTrace();
        }
    }

    private static void login(Connection connection, Scanner scanner) throws SQLException {
        System.out.println("Entrez votre email");
        String email = scanner.nextLine();

        System.out.println("Entrez votre mot de passe:");
        String mdp = scanner.nextLine();

        if (isValidUser(connection, email, mdp)) {
            System.out.println("Vous etes connecter !");
        } else {
            System.out.println("Mots de passe ou email faux.");

            System.out.println("Pour ce connecter tapez 1.");
            System.out.println("Pour revenir sur le menu principale tapez 2");

            int choice = scanner.nextInt();
            scanner.nextLine(); // Consume the newline

            switch (choice) {
                case 1:
                    System.out.println("Vous etes connecter. \n \n \n \n \n \n\n \n \n \n");

                    String query = "SELECT * FROM user";

                    PreparedStatement preparedStatement = connection.prepareStatement(query);
                    ResultSet resultSet = preparedStatement.executeQuery();

                    while (resultSet.next()) {
                        String username = resultSet.getString("nom_utilisateur");
                        String password = resultSet.getString("mot_de_passe");
                        System.out.println("Utilisateur: " + username + ", Mot de passe: " + password);
                    }


                    login(connection, scanner);
                    break;
                case 2:
                    break;
                default:
                    System.out.println("Erreur." );
            }
        }
    }

    private static boolean isValidUser(Connection connection, String email, String mdp) throws SQLException {
        Scanner scanner = new Scanner(System.in);
        boolean quitter = false;
        while (!quitter) {
            afficherMenu();
            System.out.print("Choisissez une option : ");
            int choix = scanner.nextInt();

            switch (choix) {
                case 1:
                    listerUtilisateurs(connection);
                    break;
                case 2:
                    rechercherUtilisateur(connection);
                    break;
                case 3:
                    ajouterUtilisateur(connection);
                    break;
                case 4:
                    quitter = true;
                    break;
                default:
                    System.out.println("Option invalide. Veuillez choisir à nouveau.");
            }
        }

        System.out.println("Merci d'avoir utilisé l'application.");
        return quitter;
    } catch (SQLException e) {
        e.printStackTrace();
    }


    private static void afficherMenu() {
        System.out.println("\nMenu de l'Application :");
        System.out.println("1. Lister les utilisateurs");
        System.out.println("2. Rechercher un utilisateur");
        System.out.println("3. Ajouter un utilisateur");
        System.out.println("4. Quitter");
    }

    private static void listerUtilisateurs(Connection connection) {
        // Implémentez la logique pour lister les utilisateurs depuis la base de données
        System.out.println("Fonctionnalité non implémentée : Liste des utilisateurs");
    }

    private static void rechercherUtilisateur(Connection connection) {
        // Implémentez la logique pour rechercher un utilisateur dans la base de données
        System.out.println("Fonctionnalité non implémentée : Recherche d'utilisateur");
    }

    private static void ajouterUtilisateur(Connection connection) {
        // Implémentez la logique pour ajouter un utilisateur dans la base de données
        System.out.println("Fonctionnalité non implémentée : Ajout d'utilisateur");
    }
}





