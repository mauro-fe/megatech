<main class="py-5">
    <div class="container">
        <div class="row g-5 cards-container mt-2">
            <h2 class="text-center fw-bold section-title">iPhones</h2>

            <?php foreach ($iphones as $iphone): ?>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center  effect-scale">
                    <div class="card-flip">
                        <div class="card-inner">
                            <!-- Frente -->
                            <div class="card-front card border-0 shadow-sm">
                                <h5 class="card-title fw-semibold text-center"><?= $iphone->nome ?></h5>
                                <img src="<?= $iphone->imagem ?>" class="card-img-top" alt="<?= $iphone->nome ?>">
                                <div class="card-body d-flex align-items-center">
                                    <button class="btn btn-enhanced btn-ver-detalhes">
                                        <i class="fas fa-info-circle "></i> Ver Detalhes
                                    </button>
                                    <button class="btn btn-enhanced btn-comprar" data-nome="<?= $iphone->nome ?>"
                                        data-id="<?= $iphone->id ?>">
                                        <i class="fas fa-shopping-cart"></i> Comprar
                                    </button>
                                </div>
                            </div>

                            <!-- Verso -->
                            <div class="card-back card border-0 shadow-sm">
                                <div
                                    class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                                    <h5 class="fw-semibold mb-4"><?= $iphone->nome ?></h5>

                                    <div class="w-100 spec-scroll">
                                        <div class="spec-item">
                                            <div class="spec-icon">
                                                <i class="fas fa-microchip"></i>
                                            </div>
                                            <div class="text-start">
                                                <strong>Processador</strong><br>
                                                <small><?= $iphone->especificacoes['Processador'] ?? 'N/A' ?></small>
                                            </div>
                                        </div>

                                        <div class="spec-item">
                                            <div class="spec-icon">
                                                <i class="fas fa-camera"></i>
                                            </div>
                                            <div class="text-start">
                                                <strong>Câmera</strong><br>
                                                <small><?= $iphone->especificacoes['camera'] ?? 'N/A' ?></small>
                                            </div>
                                        </div>

                                        <div class="spec-item">
                                            <div class="spec-icon">
                                                <i class="fas fa-battery-full"></i>
                                            </div>
                                            <div class="text-start">
                                                <strong>Bateria</strong><br>
                                                <small><?= $iphone->especificacoes['Bateria'] ?? 'N/A' ?></small>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-enhanced btn-voltar w-100 mt-4">
                                        <i class="fas fa-arrow-left me-2"></i>Voltar
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>

    <!-- Modal Melhorado -->
    <div class="modal fade" id="modalComprar" tabindex="-1" aria-labelledby="modalComprarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalComprarLabel">
                        <i class="fas fa-shopping-cart me-2"></i>
                        Comprar <span id="nomeProduto"></span>
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    <form id="formCompra">
                        <input type="hidden" id="produtoId">

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                <i class="fas fa-palette me-2"></i>Cor
                            </label>
                            <select class="form-select" id="corProduto" required>
                                <option value="">Selecione uma cor</option>
                                <option value="Preto">🖤 Preto</option>
                                <option value="Branco">🤍 Branco</option>
                                <option value="Azul">💙 Azul</option>
                                <option value="Dourado">💛 Dourado</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                <i class="fas fa-hdd me-2"></i>Armazenamento
                            </label>
                            <select class="form-select" id="armazenamentoProduto" required>
                                <option value="">Selecione o armazenamento</option>
                                <option value="128GB">📱 128GB</option>
                                <option value="256GB">📱 256GB</option>
                                <option value="512GB">📱 512GB</option>
                                <option value="1TB">📱 1TB</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                <i class="fas fa-sort-numeric-up me-2"></i>Quantidade
                            </label>
                            <input type="number" id="quantidadeProduto" class="form-control" value="1" min="1" max="10">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="#" id="linkWhatsapp" target="_blank" class="btn w-100">
                        <i class="fab fa-whatsapp me-2"></i>
                        Finalizar Compra no WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
    /* Variáveis e Base */
    :root {
        --primary-color: #0d6efd;
        --dark-color: #212529;
        --light-color: #f8f9fa;
        --border-radius: 16px;
        --transition-fast: 0.3s cubic-bezier(0.4, 0.0, 0.2, 1);
        --transition-medium: 0.6s cubic-bezier(0.4, 0.0, 0.2, 1);
        --shadow-subtle: 0 4px 6px rgba(0, 0, 0, 0.07);
        --shadow-medium: 0 10px 25px rgba(0, 0, 0, 0.15);
        --shadow-strong: 0 20px 40px rgba(0, 0, 0, 0.2);
    }

    /* Título da Seção */
    .section-title {
        position: relative;
        display: inline-block;
        /* background: linear-gradient(135deg, var(--primary-color) 0%, var(--light-color) 100%); */
        background-color: var(--primary-color);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: fadeInUp 1s ease-out;
    }


    .section-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 3px;
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--light-color) 100%);
        border-radius: 2px;
        animation: expandWidth 1.2s ease-out 0.5s both;
    }

    /* Container de Cards */
    .cards-container {
        animation: fadeIn 1s ease-out 0.3s both;
    }

    /* Card Flip Melhorado */
    .card-flip {
        perspective: 1000px;
        opacity: 0;
        transform: translateY(50px);
        animation: slideInUp 0.8s ease-out forwards;
    }

    .card-flip:nth-child(1) {
        animation-delay: 0.1s;
    }

    .card-flip:nth-child(2) {
        animation-delay: 0.2s;
    }

    .card-flip:nth-child(3) {
        animation-delay: 0.3s;
    }

    .card-flip:nth-child(4) {
        animation-delay: 0.4s;
    }

    .card-flip:nth-child(5) {
        animation-delay: 0.5s;
    }

    .card-flip:nth-child(6) {
        animation-delay: 0.6s;
    }

    .card-flip:nth-child(7) {
        animation-delay: 0.7s;
    }

    .card-flip:nth-child(8) {
        animation-delay: 0.8s;
    }

    .card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        transition: transform 0.8s cubic-bezier(0.4, 0.0, 0.2, 1);
        transform-style: preserve-3d;
        will-change: transform;
    }

    .card-inner.is-flipped {
        transform: rotateY(180deg);
    }

    .card-front,
    .card-back {
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
        border-radius: var(--border-radius);
        position: absolute;
        top: 0;
        left: 0;
        overflow: hidden;
    }

    .card-front {
        background: white;
        transform: rotateY(0deg);
        box-shadow: var(--shadow-subtle);
        transition: all var(--transition-medium);
    }

    .card-back {
        background: linear-gradient(135deg, var(--dark-color) 0%, #495057 100%);
        color: white;
        transform: rotateY(180deg);
        box-shadow: var(--shadow-medium);
    }

    .card {
        max-width: 100%;
        width: 280px;
        min-height: 420px;
        margin: auto;
        border-radius: var(--border-radius);
        border: none !important;
        position: relative;
        overflow: hidden;
    }

    /* Efeito Hover na Card */
    .card-flip:hover .card-front {
        transform: translateY(-10px) scale(1.02);
        box-shadow: var(--shadow-strong);
    }

    .card-flip:hover .card-front::before {
        opacity: 0.1;
    }

    .card-front::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(102, 126, 234, 0.1) 0%, rgba(118, 75, 162, 0.1) 100%);
        opacity: 0;
        transition: opacity var(--transition-fast);
        pointer-events: none;
    }

    /* Título do Produto */
    .card-title {
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 1rem;
        color: var(--dark-color);
        position: relative;
        padding: 0 15px;
        margin-top: 15px;
    }

    /* Imagem do Produto */
    .card-img-top {
        object-fit: contain;
        height: 260px;
        padding: 20px;
        transition: transform var(--transition-medium);
        background: linear-gradient(45deg, #f8f9fa, #e9ecef);
    }

    .card-flip:hover .card-img-top {
        transform: scale(1.1) rotate(5deg);
    }

    /* Botões Melhorados */
    .btn-enhanced {
        border-radius: 12px;
        font-weight: 600;
        transition: all var(--transition-fast);
        position: relative;
        overflow: hidden;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-size: 0.65rem;
    }

    .btn-enhanced::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s;
    }

    .btn-enhanced:hover::before {
        left: 100%;
    }

    .btn-ver-detalhes {
        background: var(--dark-color);
        border: none;
        color: white;
    }

    .btn-ver-detalhes:hover {
        background: #495057;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(33, 37, 41, 0.3);
        color: white;
    }



    .btn-comprar:hover {
        background: var(--dark-color);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(33, 37, 41, 0.2);
    }

    .btn-comprar.loading {
        position: relative;
        color: transparent;
    }

    .btn-comprar.loading::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 20px;
        height: 20px;
        border: 2px solid #ccc;
        border-top: 2px solid var(--dark-color);
        border-radius: 50%;
        animation: spin 1s linear infinite;
    }

    /* Card Back Specs */

    .spec-scroll {
        max-height: 250px;
        /* 🔥 Define a altura máxima */
        overflow-y: auto;
        /* 🔥 Ativa o scroll vertical */
        padding-right: 5px;
        /* 🔥 Opcional: espaço pra não encostar na barra */
    }

    /* 🔥 Scroll mais bonito (opcional) */
    .spec-scroll::-webkit-scrollbar {
        width: 6px;
    }

    .spec-scroll::-webkit-scrollbar-thumb {
        background-color: rgba(0, 0, 0, 0.3);
        border-radius: 3px;
    }

    .spec-scroll::-webkit-scrollbar-track {
        background-color: transparent;
    }


    .spec-item {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
        padding: 8px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        animation: slideInLeft 0.5s ease-out forwards;
        opacity: 0;
    }

    .card-inner.is-flipped .spec-item:nth-child(1) {
        animation-delay: 0.1s;
    }

    .card-inner.is-flipped .spec-item:nth-child(2) {
        animation-delay: 0.2s;
    }

    .card-inner.is-flipped .spec-item:nth-child(3) {
        animation-delay: 0.3s;
    }

    .card-inner.is-flipped .spec-item:nth-child(4) {
        animation-delay: 0.4s;
    }

    .spec-icon {
        width: 35px;
        height: 35px;
        background: rgba(255, 255, 255, 0.15);
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 12px;
        color: #667eea;
    }

    .btn-voltar {
        background: rgba(255, 255, 255, 0.2);
        border: 1px solid rgba(255, 255, 255, 0.3);
        color: white;
        backdrop-filter: blur(10px);
    }

    .btn-voltar:hover {
        background: rgba(255, 255, 255, 0.3);
        color: white;
        transform: translateY(-2px);
    }

    /* Modal Melhorado */
    .modal-content {
        border-radius: var(--border-radius);
        border: none;
        box-shadow: var(--shadow-strong);
        overflow: hidden;
    }

    .modal-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
    }

    .modal-body {
        padding: 2rem;
    }

    .form-select,
    .form-control {
        border-radius: 10px;
        border: 2px solid #e9ecef;
        padding: 12px 16px;
        transition: all var(--transition-fast);
    }

    .form-select:focus,
    .form-control:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.25);
    }

    .modal-footer {
        border: none;
        padding: 1.5rem 2rem;
    }

    #linkWhatsapp {
        background: #25d366;
        border: none;
        border-radius: 12px;
        padding: 15px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        transition: all var(--transition-fast);
        position: relative;
        overflow: hidden;
    }

    #linkWhatsapp:hover {
        background: #128c7e;
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(37, 211, 102, 0.3);
    }

    #linkWhatsapp::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.6s;
    }

    #linkWhatsapp:hover::before {
        left: 100%;
    }

    /* Animações */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-30px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes expandWidth {
        from {
            width: 0;
        }

        to {
            width: 60px;
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes spin {
        from {
            transform: translate(-50%, -50%) rotate(0deg);
        }

        to {
            transform: translate(-50%, -50%) rotate(360deg);
        }
    }

    @keyframes pulse {

        0%,
        100% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.05);
        }
    }

    /* Responsividade */
    @media (max-width: 768px) {
        .card {
            width: 100%;
            max-width: 300px;
        }

        .card-img-top {
            height: 220px;
        }

        .section-title {
            font-size: 2rem;
        }
    }

    @media (max-width: 576px) {
        .card-img-top {
            height: 200px;
        }

        .modal-body {
            padding: 1.5rem;
        }
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Função para animações dos cards
    function initCardAnimations() {
        const cards = document.querySelectorAll('.card-flip');

        cards.forEach((card, index) => {
            card.style.animationDelay = `${index * 0.1}s`;
        });
    }

    // Função para flip dos cards
    function initCardFlip() {
        document.querySelectorAll('.btn-ver-detalhes').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                const cardInner = btn.closest('.card-flip').querySelector('.card-inner');
                cardInner.classList.add('is-flipped');

                // Adiciona pequena vibração no celular se disponível
                if (navigator.vibrate) {
                    navigator.vibrate(50);
                }

                // Trigger das animações dos specs
                setTimeout(() => {
                    const specItems = cardInner.querySelectorAll('.spec-item');
                    specItems.forEach(item => {
                        item.style.animation = 'slideInLeft 0.5s ease-out forwards';
                    });
                }, 400);
            });
        });

        document.querySelectorAll('.btn-voltar').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                const cardInner = btn.closest('.card-flip').querySelector('.card-inner');
                cardInner.classList.remove('is-flipped');

                if (navigator.vibrate) {
                    navigator.vibrate(30);
                }
            });
        });
    }

    // Função para modal de compra
    function initPurchaseModal() {
        const modal = new bootstrap.Modal(document.getElementById('modalComprar'));

        document.querySelectorAll('.btn-comprar').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();

                // Animação de loading no botão
                btn.classList.add('loading');

                setTimeout(() => {
                    btn.classList.remove('loading');

                    const nome = btn.getAttribute('data-nome');
                    const id = btn.getAttribute('data-id');

                    document.getElementById('nomeProduto').textContent = nome;
                    document.getElementById('produtoId').value = id;

                    // Reset form
                    document.getElementById('corProduto').value = '';
                    document.getElementById('armazenamentoProduto').value = '';
                    document.getElementById('quantidadeProduto').value = 1;

                    // Reset WhatsApp link
                    document.getElementById('linkWhatsapp').href = '#';

                    modal.show();

                    // Animação de entrada do modal
                    setTimeout(() => {
                        document.querySelector('.modal-content').style.animation =
                            'fadeInUp 0.3s ease-out';
                    }, 150);

                }, 800);
            });
        });
    }

    // Função para WhatsApp dinâmico
    function initWhatsAppIntegration() {
        const linkWhatsapp = document.getElementById('linkWhatsapp');
        const form = document.getElementById('formCompra');

        function updateWhatsAppLink() {
            const nome = document.getElementById('nomeProduto').textContent;
            const cor = document.getElementById('corProduto').value;
            const armazenamento = document.getElementById('armazenamentoProduto').value;
            const quantidade = document.getElementById('quantidadeProduto').value;

            if (cor && armazenamento) {
                const mensagem =
                    `Olá! Tenho interesse no *${nome}*.\n\n📱 Produto: *${nome}*\n🎨 Cor: *${cor}*\n💾 Armazenamento: *${armazenamento}*\n📦 Quantidade: *${quantidade}*\n\nPoderia me passar mais informações sobre disponibilidade e formas de pagamento?`;

                const numero = '5544998170770';
                const url = `https://wa.me/${numero}?text=${encodeURIComponent(mensagem)}`;

                linkWhatsapp.href = url;
                linkWhatsapp.style.opacity = '1';
                linkWhatsapp.style.transform = 'scale(1)';
            } else {
                linkWhatsapp.href = '#';
                linkWhatsapp.style.opacity = '0.6';
                linkWhatsapp.style.transform = 'scale(0.95)';
            }
        }

        // Event listeners para atualizar o link
        form.addEventListener('input', updateWhatsAppLink);
        form.addEventListener('change', updateWhatsAppLink);

        // Adiciona feedback visual quando link está pronto
        linkWhatsapp.addEventListener('click', function(e) {
            if (this.href === '#' || this.href.includes('#')) {
                e.preventDefault();

                // Shake animation para indicar campos incompletos
                this.style.animation = 'pulse 0.5s ease-in-out';

                // Highlight campos vazios
                const cor = document.getElementById('corProduto');
                const armazenamento = document.getElementById('armazenamentoProduto');

                if (!cor.value) {
                    cor.style.borderColor = '#dc3545';
                    cor.style.animation = 'pulse 0.5s ease-in-out';
                }
                if (!armazenamento.value) {
                    armazenamento.style.borderColor = '#dc3545';
                    armazenamento.style.animation = 'pulse 0.5s ease-in-out';
                }

                setTimeout(() => {
                    cor.style.borderColor = '';
                    armazenamento.style.borderColor = '';
                    this.style.animation = '';
                }, 500);
            }
        });
    }

    // Função para smooth scroll e outros efeitos
    function initAdvancedEffects() {
        // Intersection Observer para animações on scroll
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animation = 'slideInUp 0.8s ease-out forwards';
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        document.querySelectorAll('.card-flip').forEach(card => {
            observer.observe(card);
        });
    }

    // Inicialização quando DOM estiver carregado
    document.addEventListener('DOMContentLoaded', function() {
        initCardAnimations();
        initCardFlip();
        initPurchaseModal();
        initWhatsAppIntegration();
        initAdvancedEffects();

        console.log('🚀 MegaTech Enhanced - Sistema carregado com sucesso!');
    });

    // Preload de imagens para melhor performance
    function preloadImages() {
        const images = document.querySelectorAll('.card-img-top');
        images.forEach(img => {
            const imageLoader = new Image();
            imageLoader.src = img.src;
        });
    }

    // Chama preload após um pequeno delay
    setTimeout(preloadImages, 1000);
</script>