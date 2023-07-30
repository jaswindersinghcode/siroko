<?php

namespace CodeChallenge\Infrastructure\Http\Controller;
use CodeChallenge\Application\Service\Product\SearchProduct;
use CodeChallenge\Application\Service\Purchase\ConfirmPurchase;
use CodeChallenge\Domain\Model\Product\ProductRepository;
use CodeChallenge\Domain\Model\Purchase\Purchase;
use CodeChallenge\Domain\Model\Purchase\PurchaseRepository;
use CodeChallenge\Domain\Model\ShoppingCart\ShoppingCart;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class ShoppingCartController extends BaseController
{
    private SearchProduct $searchProduct;

    private ConfirmPurchase $confirmPurchase;
    private PurchaseRepository $purchaseRepository;

    private Purchase $purchase;

    public function __construct(SearchProduct $searchProduct,
                                ConfirmPurchase $confirmPurchase,
                                PurchaseRepository $purchaseRepository,
                                Purchase $purchase

    )
    {
        $this->searchProduct = $searchProduct;
        $this->confirmPurchase = $confirmPurchase;
        $this->purchaseRepository = $purchaseRepository;
        $this->purchase = $purchase;
    }

    public function add(Request $request, SessionInterface $session): JsonResponse
    {
        return $this->handleCartAction($request, $session, 'addProduct');
    }

    public function update(Request $request, SessionInterface $session): JsonResponse
    {
        return $this->handleCartAction($request, $session, 'updateProduct');
    }

    public function remove(Request $request, SessionInterface $session): JsonResponse
    {

        return $this->handleCartAction($request, $session, 'removeProduct');

    }

    public function confirmPurchase(Request $request, SessionInterface $session): JsonResponse
    {
        $cart = $this->getOrCreateCart($session);

       $this->confirmPurchase->execute($cart);

        //$purchaseService = new ConfirmPurchase($this->productRepository, $this->purchaseRepository, $this->purchase);
        //$purchaseService->execute($cart);

        $session->remove('cart');

        return $this->callService(
            function () use ($cart) {
                return ['confirmed_purchase' => $cart];
            }
        );
    }
    private function handleCartAction(Request $request, SessionInterface $session, string $action): JsonResponse
    {
        $content = $this->getJsonStringAsArrayCollection($request);
        $productId = intval($content->get('productId'));
        $quantity = intval($content->get('quantity'));

        $product = $this->searchProduct->execute($productId);

        if (!$product) {
            return new JsonResponse('Product not found', JsonResponse::HTTP_NOT_FOUND);
        }

        $cart = $this->getOrCreateCart($session);
        $cart->$action($product, $quantity);
        $session->set('cart', $cart);
        //return new JsonResponse('Product error', JsonResponse::HTTP_NOT_FOUND);;

        return $this->getCartItemsResponse($cart);
    }

    private function getOrCreateCart(SessionInterface $session): ShoppingCart
    {
        return $session->get('cart', new ShoppingCart());
    }

    private function getCartItemsResponse(ShoppingCart $cart): JsonResponse
    {
        return $this->callService(
            function () use ($cart) {
                return ['cart_items' => $cart->getItems()];
            }
        );
    }




}
