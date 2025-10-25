package Formula1.JAVA;

public abstract class Monoplaza {
    protected String nombrePiloto;
    protected String nacionalidad;
    protected int numeroPlaza;
    protected String escuderia;
    protected int cantidadPuntos;


    ////////////CONSTRUCTOR/////////////////
            ///CON PARAMETROS///
    public Monoplaza(String pNombrePiloto, String pNacionalidad, int pNumeroPlaza,String pEscuderia ,int pCantidadPuntos){
    this.nombrePiloto=pNombrePiloto;
    this.nacionalidad=pNacionalidad;
    this.numeroPlaza=pNumeroPlaza;
    this.escuderia=pEscuderia;
    this.cantidadPuntos=pCantidadPuntos;
    }

    ///////////////////GETTERS Y SETTERS/////////////////
    public String getNombrePiloto() {
        return nombrePiloto;
    }
    public void setNombrePiloto(String nombrePiloto) {
        this.nombrePiloto = nombrePiloto;
    }
    public String getNacionalidad() {
        return nacionalidad;
    }
    public void setNacionalidad(String nacionalidad) {
        this.nacionalidad = nacionalidad;
    }
    public int getNumeroPlaza() {
        return numeroPlaza;
    }
    public void setNumeroPlaza(int numeroPlaza) {
        this.numeroPlaza = numeroPlaza;
    }
    public String getEscuderia() {
        return escuderia;
    }
    public void setEscuderia(String escuderia) {
        this.escuderia = escuderia;
    }
    public int getCantidadPuntos() {
        return cantidadPuntos;
    }
    public void setCantidadPuntos(int cantidadPuntos) {
        this.cantidadPuntos = cantidadPuntos;
    }

    /////////////////METODOS////////////////////
    
    public abstract void otorgarPuntos(int posicion, boolean vueltaRapida);
    public abstract boolean posicionValida(int posicion);

    @Override
    public String toString() {
        return "Piloto: " + nombrePiloto + " (" + nacionalidad + "), Nº " + numeroPlaza +
                ", Escudería: " + escuderia + ", Puntos: " + cantidadPuntos;
    }
    
}

    
