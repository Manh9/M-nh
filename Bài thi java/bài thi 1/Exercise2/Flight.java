package Exercise2;

public class Flight {
    private int number;
    private String destination;

    public Flight() {
        this.number = 0;
        this.destination = "";
    }

    public Flight(int number, String destination) {
        if (number > 0) {
            this.number = number;
        } else {
            this.number = 0;
        }
        if (destination != null) {
            this.destination = destination;
        } else {
            this.destination = "";
        }
    }

    public String getDestination() {
        return destination;
    }

    public int getNumber() {
        return number;
    }

    public void display() {
        System.out.println(number + ", " + destination);
    }
}
