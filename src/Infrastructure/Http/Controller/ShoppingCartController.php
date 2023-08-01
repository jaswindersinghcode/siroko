<?php

namespace CodeChallenge\Infrastructure\Http\Controller;
use CodeChallenge\Application\Service\Cart\CartService;
use CodeChallenge\Application\Service\Product\SearchProduct;
use CodeChallenge\Domain\Model\CartAggregate\CartAggregate;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class ShoppingCartController extends BaseController
{
    private SearchProduct $searchProduct;
    private CartService $cartService;
    public function __construct(SearchProduct $searchProduct,
                                CartService $cartService
    )
    {
        $this->searchProduct = $searchProduct;
        $this->cartService = $cartService;
    }
    public function add(Request $request, SessionInterface $session): JsonResponse

    {
        return $this->handleCartAction($request, $session, 'addProduct');
    }

    public function update(Request $request, SessionInterface $session): JsonResponse
    {
        return $this->handleCartAction($request, $session, 'updateProduct');
    }

    public function delete(Request $request, SessionInterface $session): JsonResponse
    {
        return $this->handleCartAction($request, $session, 'removeProduct');
    }

    public function confirmPurchase(Request $request, SessionInterface $session): JsonResponse
    {
        $cart = $this->getOrCreateCart($session);
        $this->cartService->save($cart);
        $session->remove('cart');

        return $this->callService(
            function () use ($cart) {
                return ['confirmed_purchase' => $cart];
            }
        );
    }

    public function countProductsInCart(SessionInterface $session): JsonResponse{
        $cart = $this->getOrCreateCart($session);
        return $this->callService(
            function () use ($cart) {
                return ['number_of_products' => $cart->getTotalProducts()];
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
        $cartAggregate = $this->getOrCreateCart($session);
        $cartAggregate->$action($product, $quantity);
        $session->set('cart', $cartAggregate);

        return $this->getCartItemsResponse($cartAggregate);
    }

    private function getOrCreateCart(SessionInterface $session): CartAggregate
    {
        return $session->get('cart', new CartAggregate());
    }

    private function getCartItemsResponse(CartAggregate $cartAggregate): JsonResponse
    {
        return $this->callService(
            function () use ($cartAggregate) {
                return ['cart_items' => $cartAggregate->getItems()];
            }
        );
    }

}
