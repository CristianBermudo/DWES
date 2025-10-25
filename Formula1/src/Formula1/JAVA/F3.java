package Formula1.JAVA;

public class F3 extends Monoplaza{
    private String nombreAcademia;

    ////////////////CONSTRUCTOR/////////////
    public F3(String nombrePiloto, String nacionalidad, int numeroPlaza, String escuderia, int cantidadPuntos, String pNombreAcademia) {
        super(nombrePiloto, nacionalidad, numeroPlaza, escuderia, cantidadPuntos);
        this.nombreAcademia = pNombreAcademia;
    }
    ///////////////////GETTERS Y SETTERS/////////////////
    public void setNombreAcademia(String nombreAcademia) {
        this.nombreAcademia = nombreAcademia;
    }
    public String getNombreAcademia() {
        return nombreAcademia;
    }

    ////////////METODOS////////////////
    @Override
public boolean posicionValida(int posicion) {
    if(posicion >=1 && posicion<=30){
        return true;
    }else{
        return false;
    }
}


    @Override
public void otorgarPuntos(int posicion, boolean vueltaRapida) {
    if (!posicionValida(posicion)) return;
    
    switch (posicion) {
        case 1 -> cantidadPuntos += 10;
        case 2 -> cantidadPuntos += 8;
        case 3 -> cantidadPuntos += 7;
        case 4 -> cantidadPuntos += 6;
        case 5 -> cantidadPuntos += 5;
        case 6 -> cantidadPuntos += 4;
        case 7 -> cantidadPuntos += 3;
        case 8 -> cantidadPuntos += 2;
        case 9 -> cantidadPuntos += 1;
        default -> cantidadPuntos += 0;
    }
}
public F2 subirCategoria(boolean tieneSuperlicencia) {
    return new F2(nombrePiloto, nacionalidad, numeroPlaza, escuderia, cantidadPuntos, tieneSuperlicencia);
    }

    @Override
        public String toString() {
        return super.toString() + " | Academia: " + nombreAcademia;
    }
}

