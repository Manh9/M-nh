package Exercise2;

public class TestFlight {
        public static void main(String[] args) {
            Flight g1 = new Flight(857, "Toronto");
            System.out.println(g1.getNumber());
            System.out.println(g1.getDestination());
            g1.display();
        }
    }