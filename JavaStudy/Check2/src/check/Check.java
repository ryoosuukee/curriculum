package check;




import check.*;
import constants.*;


public class Check {

    
    private String firstName = "真弥";
    private String lastName = "七海";
    
    public Check(String firstName, String lastName) {
        
        this.firstName = firstName;
        this.lastName = lastName;
        
    }

    
    
    
    public static void main(String[] args) {
      
        Pet rb = new Pet("java吉", "hoge");
        
        rb.introduce();
        
        RobotPet rb2 = new RobotPet("R2D2", "ルーク");
        
        rb2.introduce();
       
        
        
        
        
        
    }

}
