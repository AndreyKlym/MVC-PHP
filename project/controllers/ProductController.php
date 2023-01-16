<?php
//⊗ppOpUFmCVT
namespace Project\Controllers;
use \Core\Controller;

//task #1
class ProductController extends Controller
{
    private $products;

    public function __construct()
    {
        $this->products = [

            1 => [
                'name'     => 'product1',
                'price'    => 100,
                'quantity' => 5,
                'category' => 'category1',
            ],
            2 => [
                'name'     => 'product2',
                'price'    => 200,
                'quantity' => 6,
                'category' => 'category2',
            ],
            3 => [
                'name'     => 'product3',
                'price'    => 300,
                'quantity' => 7,
                'category' => 'category2',
            ],
            4 => [
                'name'     => 'product4',
                'price'    => 400,
                'quantity' => 8,
                'category' => 'category3',
            ],
            5 => [
                'name'     => 'product5',
                'price'    => 500,
                'quantity' => 9,
                'category' => 'category3',
                ],
        ];
    }

    // task #2
   public function show($params)
   {
        $prodNum=$params['n'];
        $prodArr = $this->products;
        $prodItem=($prodArr[$prodNum]);
        var_dump($prodItem);

   // task #3
       $prodName=($prodItem['name']);
       $prodPrice=($prodItem['price']);
       $prodQuantity=($prodItem['quantity']);
       $prodCategory=($prodItem['category']);

       return $this->render('product/show', [
               'name'     => $prodName,
               'price'    => $prodPrice,
               'quantity' => $prodQuantity,
               'category' => $prodCategory,
       ]);
   }

    //task #4
    public function all()
    {
        $this->title = "Action All controler Product";

        $prodArr = $this->products;
        // var_dump($prodArr);
        ?>
            <table>
                <tr>
                <td>Product number</td>
                <td>Product name</td>
                <td>Category</td>
                <td>Price</td>
                <td>Quantity</td>
                <td>Cost</td>
                </tr>
            <?php foreach ($prodArr as $productNum=>$item): ?>
                <tr>
                <td><?= $productNum; ?></td>
                <td><?= $item['name']; ?></td>
                <td><?= $item['category']; ?></td>
                <td><?= $item['price']; ?></td>
                <td><?= $item['quantity']; ?></td>
                <td><?= $item['price'] * $item['quantity']; ?></td>
                </tr>
            <?php endforeach; ?>
            </table>
        <?php
    }

}
