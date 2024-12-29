import { Link } from '@inertiajs/react';

export default function Show({ product }) {
  return (
    <div className="bg-white p-6 rounded-lg shadow-md max-w-2xl mx-auto">
      <h1 className="text-3xl font-bold mb-4 text-center text-gray-800">{product.name}</h1>
      <p className="text-gray-700 mb-4">{product.description}</p>
      <p className="text-xl font-semibold text-gray-800 mb-6">Price: ${product.price}</p>
      <Link href="/products" className="text-blue-500 hover:underline">
        Back to All Products
      </Link>
    </div>
  );
}
