package Formula1;

public class FAcademy extends Monoplaza{
    private int potenciaMaxima;

    ///////////CONSTRUCTOR
    public FAcademy(String nombrePiloto, String nacionalidad, int numeroPlaza, String escuderia, int cantidadPuntos, int potenciaMaxima) {
        super(nombrePiloto, nacionalidad, numeroPlaza, escuderia, cantidadPuntos);
        this.potenciaMaxima = potenciaMaxima;
    }
    ///////////////////GETTERS Y SETTERS/////////////////
    public int getPotenciaMaxima() {
        return potenciaMaxima;
    }
    public void setPotenciaMaxima(int potenciaMaxima) {
        this.potenciaMaxima = potenciaMaxima;
    }

    ////////////////METODOS///////////////////
    @Override
    public boolean posicionValida(int posicion) {
        if (posicion >= 1 && posicion <= 18) {
            return true;
        } else {
            return false;
        }
    }

    public void otorgarPuntos(int posicion, boolean vueltaRapida) {
        if (!posicionValida(posicion)) return;

        switch (posicion) {
            case 1 -> cantidadPuntos += 18;
            case 2 -> cantidadPuntos += 15;
            case 3 -> cantidadPuntos += 12;
            case 4 -> cantidadPuntos += 10;
            case 5 -> cantidadPuntos += 8;
            case 6 -> cantidadPuntos += 6;
            case 7 -> cantidadPuntos += 4;
            case 8 -> cantidadPuntos += 2;
            case 9 -> cantidadPuntos += 1;
            default -> cantidadPuntos += 0;
        }

        if (vueltaRapida && posicion <= 10) cantidadPuntos += 1;
    }

    public F4 subirCategoria(String paisCategoria) {
        return new F4(nombrePiloto, nacionalidad, numeroPlaza, escuderia, cantidadPuntos, paisCategoria);
    }

    @Override
    public String toString() {
    return super.toString() + " | Potencia Máxima: " + potenciaMaxima;
    }
}
