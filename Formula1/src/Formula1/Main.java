package Formula1;

public class Main {
    public static void main(String[] args) {
        
        // ====== EJEMPLO 1: F2 sin superlicencia ======
        System.out.println("=== F2 sin superlicencia ===");
        F2 pilotoF2_1 = new F2("Carlos Sainz Jr", "Española", 55, "Prema Racing", 0, false);
        pilotoF2_1.otorgarPuntos(1, true); // Gana la carrera y hace vuelta rápida
        System.out.println("Puntos actuales: " + pilotoF2_1.getCantidadPuntos());
        pilotoF2_1.subirCategoria("Shell"); // No tiene superlicencia

        // ====== EJEMPLO 2: F2 con superlicencia ======
        System.out.println("\n=== F2 con superlicencia ===");
        F2 pilotoF2_2 = new F2("Oscar Piastri", "Australiana", 81, "Virtuosi", 0, true);
        pilotoF2_2.otorgarPuntos(2, false);
        System.out.println("Puntos actuales: " + pilotoF2_2.getCantidadPuntos());
        
        // Sube de categoría a F1
        F1 nuevoPilotoF1 = pilotoF2_2.subirCategoria("McLaren");
        if (nuevoPilotoF1 != null) {
            System.out.println("¡Ha subido a F1 con patrocinador: " + nuevoPilotoF1.getNombrePatrocinador() + "!");
        }

        // ====== EJEMPLO 3: F1 y vuelta rápida ======
        System.out.println("\n=== F1 con vuelta rápida ===");
        F1 pilotoF1 = new F1("Max Verstappen", "Neerlandesa", 1, "Red Bull Racing", 0, "Oracle");
        pilotoF1.otorgarPuntos(1, true);
        System.out.println("Puntos tras carrera (1º + vuelta rápida): " + pilotoF1.getCantidadPuntos());

        // ====== EJEMPLO 4: F1 fuera del top 10 ======
        System.out.println("\n=== F1 fuera del top 10 ===");
        F1 pilotoF1_2 = new F1("Valtteri Bottas", "Finlandesa", 77, "Kick Sauber", 0, "Stake");
        pilotoF1_2.otorgarPuntos(13, true); // No debería sumar puntos
        System.out.println("Puntos tras carrera (13º + vuelta rápida): " + pilotoF1_2.getCantidadPuntos());
    }
}