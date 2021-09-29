<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mike42\Escpos\EscposImage;
use Mike42\Escpos\PrintConnectors\FilePrintConnector;
use Mike42\Escpos\Printer;
use App\Http\Controllers\Item;


class PrintingReceiptController extends Controller
{
    public function __construct(){
            $this->middleware('auth');
    }

    public function print_receipt(){
        $connector = new FilePrintConnector("/dev/usb/lp0");
        $printer = new Printer($connector);

        $items = [
            new Item("Example item #1", "4.00"),
            new Item("Another thing", "3.50"),
            new Item("Something else", "1.00"),
            new Item("A final item", "4.45"),
        ];
        $subtotal = new Item('Subtotal', '12.95');
        $tax = new Item('A local tax', '1.30');
        $total = new Item('Total', '14.25', true);
        /* Date is kept the same for testing */
// $date = date('l jS \of F Y h:i:s A');
        $date = "Monday 6th of April 2015 02:56:25 PM";

        /* Start the printer */
        $logo = EscposImage::load("assets/images/easywash_logo.jpeg", false);
        $printer = new Printer($connector);

        /* Print top logo */
        $printer -> setJustification(Printer::JUSTIFY_CENTER);
        $printer -> graphics($logo);

        /* Name of shop */
        $printer -> selectPrintMode(Printer::MODE_DOUBLE_WIDTH);
        $printer -> text("ExampleMart Ltd.\n");
        $printer -> selectPrintMode();
        $printer -> text("Shop No. 42.\n");
        $printer -> feed();

        /* Title of receipt */
        $printer -> setEmphasis(true);
        $printer -> text("SALES INVOICE\n");
        $printer -> setEmphasis(false);

        /* Items */
        $printer -> setJustification(Printer::JUSTIFY_LEFT);
        $printer -> setEmphasis(true);
        $printer -> text(new item('', '$'));
        $printer -> setEmphasis(false);
        foreach ($items as $item) {
            $printer -> text($item);
        }
        $printer -> setEmphasis(true);
        $printer -> text($subtotal);
        $printer -> setEmphasis(false);
        $printer -> feed();

        /* Tax and total */
        $printer -> text($tax);
        $printer -> selectPrintMode(Printer::MODE_DOUBLE_WIDTH);
        $printer -> text($total);
        $printer -> selectPrintMode();

        /* Footer */
        $printer -> feed(2);
        $printer -> setJustification(Printer::JUSTIFY_CENTER);
        $printer -> text("Thank you for shopping at ExampleMart\n");
        $printer -> text("For trading hours, please visit example.com\n");
        $printer -> feed(2);
        $printer -> text($date . "\n");

        /* Cut the receipt and open the cash drawer */
        $printer -> cut();
        $printer -> pulse();

        $printer -> close();

        /* A wrapper to do organise item names & prices into columns */

    }


}
