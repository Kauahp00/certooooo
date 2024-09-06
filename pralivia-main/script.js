
// Variável para armazenar a seleção do avatar
let isAvatarSelected = false;

// Adiciona evento de clique em cada imagem de avatar
document.querySelectorAll('.avatar').forEach(avatar => {
    avatar.addEventListener('click', function() {
        // Remove a seleção de todos os avatares
        document.querySelectorAll('.avatar').forEach(img => img.classList.remove('selected'));
        
        // Marca a imagem clicada como selecionada
        this.classList.add('selected');
        isAvatarSelected = true; // Marca que um avatar foi selecionado
        
        // Oculta a mensagem de erro
        document.getElementById('errorMessage').style.display = 'none';
    });
});

// Função para exibir o próximo modal
function showNextModal(modalId) {
    const modals = document.querySelectorAll('.modal');
    modals.forEach(modal => modal.style.display = 'none');

    const nextModal = document.getElementById(modalId);
    if (nextModal) {
        nextModal.style.display = 'flex';
    }
}

// Função para limpar a seleção do avatar
function clearSelection() {
    isAvatarSelected = false;
    document.querySelectorAll('.avatar').forEach(img => img.classList.remove('selected'));
}

// Adiciona evento de clique ao botão "Próximo"
document.getElementById('saveSelection').addEventListener('click', function() {
    if (isAvatarSelected) {
        showNextModal('modal3');
        clearSelection(); // Opcional: Limpa a seleção após avançar
    } else {
        // Exibe a mensagem de erro se nenhum avatar for selecionado
        document.getElementById('errorMessage').textContent = 'Por favor, selecione um avatar antes de continuar.';
        document.getElementById('errorMessage').style.display = 'block';
    }
});

// Exibe a primeira modal ao clicar no botão "INICIAR TESTE"
document.querySelector('.btnIniciar').addEventListener('click', function() {
    showNextModal('modal2');
});

// Função para fechar o modal e redirecionar
function closeModal(modalId) {
    var modal = document.getElementById(modalId);
    modal.style.display = "none";

    if (modalId === 'modal3') {
        window.location.href = 'quest1.html';
    }
}

// Função para controlar o conteúdo dos cards
function showContent(contentId) {
    const tabs = document.querySelectorAll('.tab-content');
    tabs.forEach(tab => tab.style.display = 'none');

    document.getElementById(contentId).style.display = 'block';

    const links = document.querySelectorAll('.nav-link');
    links.forEach(link => link.classList.remove('active'));

    document.querySelector(`.nav-link[href="#${contentId}"]`).classList.add('active');
}



///dsdsds


// AVATARES


const images = [
    { id: 'selectOrca', name: 'Orca' },
    { id: 'selectRena', name: 'Rena' },
    { id: 'selectLeao', name: 'Leão-marinho' }
];

// Função para desmarcar todas as imagens
function clearSelection() {
    images.forEach(image => {
        document.getElementById(image.id).classList.remove('selected');
    });
}

// Função para marcar a imagem clicada
function selectImage(imageId) {
    clearSelection();  // Remove a seleção de todas as outras imagens
    document.getElementById(imageId).classList.add('selected');
    lastSelectedImageId = imageId;  // Armazena o ID da última imagem clicada
}

// Função para salvar a última seleção no localStorage e especificar a imagem selecionada


// Verifica e aplica o estado de seleção ao carregar a página
function loadSelectionState() {
    const selectedImageId = localStorage.getItem('selectedImage');
    if (selectedImageId) {
        document.getElementById(selectedImageId).classList.add('selected');
        lastSelectedImageId = selectedImageId;  // Atualiza o ID da última imagem salva
    }
}

// Adiciona eventos de clique para cada imagem
images.forEach(image => {
    const imgElement = document.getElementById(image.id);

    // Aplica a seleção ao clicar
    imgElement.addEventListener('click', function() {
        selectImage(image.id);
    });
});

// Adiciona evento de clique ao botão para salvar a seleção
document.getElementById('saveSelection').addEventListener('click', saveSelection);

// Carrega o estado de seleção ao inicializar a página
window.addEventListener('load', loadSelectionState);

function clearSelection() {
    images.forEach(image => {
        document.getElementById(image.id).classList.remove('selected');
    });
}

window.addEventListener('load', function() {
    clearSelection();  // Remove seleção ao carregar
    lastSelectedImageId = null;  // Reseta a seleção inicial

});





