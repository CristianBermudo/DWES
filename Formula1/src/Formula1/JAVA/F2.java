package Formula1.JAVA;

public class F2 extends Monoplaza{
    private boolean superLicencia;

        ////////////////CONSTRUCTOR/////////////
    public F2(String nombrePiloto, String nacionalidad, int numeroPlaza, String escuderia, int cantidadPuntos, boolean pSuperLicencia) {
        super(nombrePiloto, nacionalidad, numeroPlaza, escuderia, cantidadPuntos);
        this.superLicencia = pSuperLicencia;
    }

    ///////////////////GETTERS Y SETTERS/////////////////
    public void setSuperLicencia(boolean superLicencia) {
        this.superLicencia = superLicencia;
    }
    public boolean isSuperLicencia() {
        return superLicencia;
    }
    ////////////////METODOS//////////////////
    @Override
    public boolean posicionValida(int posicion) {
        if(posicion >=1 && posicion<=24){
        return true;
    }else{
        return false;
    } 
    }

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
    public F1 subirCategoria(String nombrePatrocinador) {
        if(superLicencia){    
        return new F1(nombrePiloto, nacionalidad, numeroPlaza, escuderia, cantidadPuntos, nombrePatrocinador);
        }else{
            System.out.println(("No puede subir a F1 sin superlicencia"));
            return null;
        }
    }
    public String toString() {
        return super.toString() + " | Superlicencia: " + (superLicencia ? "Sí" : "No");
    }
}
