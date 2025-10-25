package Formula1.JAVA;

public class F4 extends Monoplaza {
    private String paisCategoria;

    // Constructor
    public F4(String nombrePiloto, String nacionalidad, int numeroPlaza, String escuderia, int cantidadPuntos, String paisCategoria) {
        super(nombrePiloto, nacionalidad, numeroPlaza, escuderia, cantidadPuntos);
        this.paisCategoria = paisCategoria;
    }

    // Getters y setters
    public String getPaisCategoria() {
        return paisCategoria;
    }

    public void setPaisCategoria(String paisCategoria) {
        this.paisCategoria = paisCategoria;
    }

    //////METODOS/////////
    
    @Override
    public boolean posicionValida(int posicion) {
        if(posicion>=1 && posicion<=30){
            return true;
        }else{
            return false;
        }
    }
    
    @Override
    public void otorgarPuntos(int posicion, boolean vueltaRapida) {
        if (!posicionValida(posicion)) return;

        switch (posicion) {
            case 1 -> cantidadPuntos += 25;
            case 2 -> cantidadPuntos += 18;
            case 3 -> cantidadPuntos += 15;
            case 4 -> cantidadPuntos += 12;
            case 5 -> cantidadPuntos += 10;
            case 6 -> cantidadPuntos += 8;
            case 7 -> cantidadPuntos += 6;
            case 8 -> cantidadPuntos += 4;
            case 9 -> cantidadPuntos += 2;
            case 10 -> cantidadPuntos += 1;
            default -> cantidadPuntos += 0;
        }
    }

    public F3 subirCategoria(String nombreAcademia) {
    return new F3(nombrePiloto, nacionalidad, numeroPlaza, escuderia, cantidadPuntos,nombreAcademia);
    }
    @Override
    public String toString() {
    return super.toString() + " | País Categoría: " + paisCategoria;
    }
}
