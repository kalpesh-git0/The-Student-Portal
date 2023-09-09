/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package database_mlsu;

/**
 *
 * @author admin
 */
import java.awt.*;

import javax.swing.*;

import java.sql.*;
import java.awt.event.*;

public class Database_mlsu implements  ActionListener{

    JFrame f;
    JPanel p1,p2,p3;
    
    JTextField t1,t2,t3;
    JButton b1;
    JLabel l1,l2,l3,l4;

    public Database_mlsu() {
    
    f=new JFrame();
    f.setTitle("User Form here...");
    f.setSize(300,300);
    f.setVisible(true);
    
    f.setLayout(new GridLayout(3,1,10,10));
    
    //Panel P1
    p1=new JPanel();
    p1.setLayout(new FlowLayout());
    l1=new JLabel("User Form");
    
    p1.add(l1);
    
    //Panel P2
    
    p2=new JPanel();
    p2.setLayout(new GridLayout(3,2,10,10));
    
    l2=new JLabel("Name");
    t1=new JTextField(20);
    
    l3=new JLabel("Age");
    t2=new JTextField(20);
    
    l4=new JLabel("City");
    t3=new JTextField(20);
    p2.add(l2);
    p2.add(t1);
    
    p2.add(l3);
    p2.add(t2);
    
    p2.add(l4);
    p2.add(t3);
    
    //Panel P3
    
    p3=new JPanel();
    p3.setLayout(new FlowLayout());
    b1=new JButton("Submit");
    p3.add(b1);
    
    f.add(p1);
    f.add(p2);
    f.add(p3);
    f.pack();
    b1.addActionListener((ActionListener) this);
    }
    
    public static void main(String[] args) {

    Database_mlsu m1=new Database_mlsu();
    }

    @Override
    public void actionPerformed(ActionEvent e) {
        
        String name=t1.getText();
        String age=t2.getText();
        String city=t3.getText();
        Connection con;
        Statement st;
        try{
            
            Class.forName("com.mysql.jdbc.Driver");//loading the driver
            //Intialize The Connection variable
            con=DriverManager.getConnection("jdbc:mysql://localhost:3306/mlsu_jav", "root","");
            st=con.createStatement();
            int i=st.executeUpdate("insert into student(name,age,city)values('"+name+"','"+age+"','"+city+"')");
            if(i!=-1)
                JOptionPane.showMessageDialog(f, "Record Insert");
            else
                JOptionPane.showMessageDialog(f, "Record Not Insert");
        }
        catch(Exception ee)
        {
            JOptionPane.showMessageDialog(f, ""+ee.getMessage());
        }}}
