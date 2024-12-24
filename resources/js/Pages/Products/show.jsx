import { Link } from '@inertiajs/react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
export default function Show({ product }) {
    return (
        <div>
            <div className='justify-center flex py-10'>
                <img
                    alt={product.name}
                    src={`/${product.image}`}
                    style={{ width: '300px', height: 'auto' }}
                />
            </div>
            <div className='justify-items-center'>
                <h1>{product.name}</h1>
                <p>{product.description}</p>
                <p>Price: ${product.price}</p>
                <Link className='rounded border-current border-2' href="/products">Back to All Products</Link>
            </div>
        </div>
    );
}
