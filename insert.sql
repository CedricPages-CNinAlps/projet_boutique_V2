INSERT INTO `orders` (`id`, `number`, `date`, `total`, `customer_id`) VALUES
(10, 6, NOW(), NULL, 2);

INSERT INTO `order_product` (`product_id`, `order_id`, `quantity`) VALUES
(11, 10, 2),
(12, 10, 1),
(13, 10, 2);

INSERT INTO `products` (`id`, `name`, `description`, `price`, `weight`, `quantity`, `image`, `availability`, `categorie_id`) VALUES
(15, 'Nain Dieu 2', 'un beau dieu', 500, 1500, 30, 'nain_dieu.jpg', 1, 3);

UPDATE products SET quantity = 500 WHERE id=2;

UPDATE products SET price = price*1.05;

DELETE FROM products WHERE products.id=14;

DELETE FROM FROM customers
WHERE id NOT IN (
    SELECT DISTINCT customer_id FROM orders
    );