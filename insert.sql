INSERT INTO `orders` ( `number`, `date`, `total`, `customer_id`) VALUES
(6, NOW(), NULL, 2);

INSERT INTO `order_product` (`product_id`, `order_id`, `quantity`) VALUES
(11, 10, 2),
(12, 10, 1),
(13, 10, 2);

INSERT INTO `products` ( `name`, `description`, `price`, `weight`, `quantity`, `image`, `availability`, `categorie_id`) VALUES
( 'Nain Dieu 2', 'un beau dieu', 500, 1500, 30, 'nain_dieu.jpg', 1, 3);

UPDATE products SET quantity = quantity + 500 WHERE id=2;

UPDATE products SET price = price*1.05;

DELETE FROM products WHERE products.id=14;

DELETE FROM customers
WHERE id NOT IN (
    SELECT DISTINCT customer_id FROM orders
    );