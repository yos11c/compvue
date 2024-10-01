<template>
    <!-- Estructura de la tarjeta para un saludo -->
    <div class="card text-center">
        <!-- Encabezado de la tarjeta con estilo de fondo azul y texto blanco -->
        <div class="card-header bg-primary text-white">
            <h3>¡Bienvenido a la Aplicación de desweb!</h3>
        </div>
        <!-- Cuerpo de la tarjeta que muestra el mensaje de saludo y un botón para cambiar el mensaje -->
        <div class="card-body">
            <p class="card-text">
                {{ mensajeSaludo }} <!-- Muestra el saludo actual -->
            </p>
            <button class="btn btn-outline-primary" @click="cambiarSaludo">
                Cambiar Saludo <!-- Botón para cambiar el saludo -->
            </button>
        </div>
    </div>
</template>

<script>
export default {
    // Definimos el estado inicial del componente
    data() {
        return {
            mensajeSaludo: "¡Hola, la carrera de ingenieria es bonita!" // Saludo inicial
        };
    },
    methods: {
        // Método para alternar entre dos mensajes de saludo diferentes
        cambiarSaludo: function () {
            this.mensajeSaludo =
                this.mensajeSaludo === "¡Hola, recuerda vivir tu vida y no la vida a ti!"
                    ? "¡Mejor viajar que quedarse con las ganas!" // Mensaje alternativo
                    : "¡Come mucho!"; // Volver al saludo original
        }
    }
};
</script>

<style scoped>
/* Añadimos algo de estilo a la tarjeta */
.card {
    border-radius: 12px; /* Bordes redondeados */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Sombra para darle algo de profundidad */
}
</style>
