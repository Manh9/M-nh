package Exercise1;

public class TestBank {
    public static void main(String[] args) {
        Bank myBank = new Bank(1000, 10);
        double monthlyInterest = myBank.calculateInterest();
        System.out.println("Monthly interest: $" + monthlyInterest);
    }
}