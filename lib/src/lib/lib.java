package lib;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.*;
import java.util.Scanner;
public class lib {
    public static void main(String[] args) throws SQLException {
        Scanner scanner = new Scanner(System.in);

        Connection maConnexion;
        String mysqlAdresse = "localhost:3306";
        String mysqlBdd = "crud";
        String mysqlUser = "root";
        String mysqlPassword = "";

        PreparedStatement maRequetePreparee;

        String requeteSql;
        int id = 0;
        ResultSet resultat;

        Scanner sc = new Scanner(System.in);


        String prenom;
        String nom;
        String age;


        System.out.println("Connexion à la base de donnée... ");

        Connection connexion = DriverManager.getConnection(
                "jdbc:mysql://localhost:3306/crud","root","");
        System.out.println("Connexion ok ! Avec les informations suivantes :");
        System.out.println("- url : \"jdbc:mysql://localhost:3306/crud\"? serverTimezone=UTC'");
        System.out.println("- user : root");
        System.out.println("- mot de passe : '' " );

        System.out.print("Connectez vous en saisissant votre email et mot de passe: ");

        String email = scanner.next();
        String mpd = scanner.next();

        requeteSql = "INSERT INTO exemple (nom,prenom,email,mdp,age) VALUES ('MaPremièreRequête',10,50.05)

        System.out.println("Préparation à l'exécution de la requête -> '" + requeteSql+ "'..." );
        maRequetePreparee = maConnexion.prepareStatement(requeteSql);
    }









}
