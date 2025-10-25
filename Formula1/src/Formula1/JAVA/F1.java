package Formula1.JAVA;

public class F1 extends Monoplaza {
    private String nombrePatrocinador;

    
    ////////////////CONSTRUCTOR/////////////
    public F1(String nombrePiloto, String nacionalidad, int numeroPlaza, String escuderia, int cantidadPuntos, String pNombrePatrocinador) {
        super(nombrePiloto, nacionalidad, numeroPlaza, escuderia, cantidadPuntos);
        this.nombrePatrocinador = pNombrePatrocinador;
    }

    ///////////////////GETTERS Y SETTERS///////////////////
    public String getNombrePatrocinador() {
        return nombrePatrocinador;
    }
    public void setNombrePatrocinador(String nombrePatrocinador) {
        this.nombrePatrocinador = nombrePatrocinador;
    }
    ///////////METODOS////////////
    @Override
    public boolean posicionValida(int posicion) {
        if(posicion >=1 && posicion<=22){
        return true;
    }else{
        return false;
    } 
    }   


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
        if(vueltaRapida && posicion <=10){
            cantidadPuntos = cantidadPuntos+1;
        }
    }
    @Override
    public String toString() {
        return super.toString() + " | Patrocinador: " + nombrePatrocinador;
    }
}
