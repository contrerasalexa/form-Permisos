function toggleMercado(permisoId) {
    const mercadoContainer = document.getElementById('mercado-container');

    // Reemplaza 1 con el valor real del ID para "Locatarios"
    if (permisoId === "3") {
        mercadoContainer.style.display = 'block';
    } else {
        mercadoContainer.style.display = 'none';
    }
}
