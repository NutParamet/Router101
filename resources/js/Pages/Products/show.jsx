import { Link } from '@inertiajs/react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
export default function Show({ product }) {
    return (
        <div className='flex justify-center items-center mt-20'>
            <div class="max-w-sm rounded-lg overflow-hidden shadow-lg border border-2 border-slate-300">
                <img class="w-full" src={`/${product.image}`} alt={product.name} />
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{product.name}</div>
                    <p class="text-gray-700 text-base">
                        {product.description}
                        <br />
                        Price: ${product.price}
                    </p>
                    <button className='flex'>
                        <Link className="rounded-md border-current border-2 px-2 mt-2 text-blue-500 hover:bg-blue-500 hover:text-white" href="/products">Back to All Products</Link>
                    </button>
                </div>
            </div>
        </div >
    );
}
