import { Link } from "@inertiajs/react";

export default function Index({ products }) {
    return (
        <>
            <h1 className="text-2xl font-bold mb-4 text-center text-gray-800">Product Index</h1>
            <div className="bg-white p-6 rounded-lg shadow-md max-w-4xl mx-auto">
                <ul className="space-y-6">
                    {products.map((product) => (
                        <li key={product.id} className="flex items-center space-x-6 bg-gray-50 p-4 rounded-lg hover:bg-gray-100 transition">
                            <Link href={`/products/${product.id}`} className="flex items-center space-x-4">
                                <img src={product.img} alt={product.name} className="w-16 h-16 rounded-lg object-cover" />
                                <div>
                                    <div className="text-lg font-semibold text-gray-800">{product.name}</div>
                                    <div className="text-gray-600">${product.price}</div>
                                </div>
                            </Link>
                        </li>
                    ))}
                </ul>
            </div>
        </>
    );
}
