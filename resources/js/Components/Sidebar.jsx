import { Link, usePage } from "@inertiajs/react";
import SecondaryButton from "@/Components/SecondaryButton";

export default function Navbar({}) {
    return (
        <>
            <div className="bg-gray-50 p-4 text-sm h-screen sticky top-0 lg:block md:block transition-transform -translate-x-full sm:translate-x-0">
                <div className="text-white">
                    <Link
                        className="mx-3"
                        href={route("home")}
                        active={route().current("home")}
                    >
                        Home
                    </Link>
                </div>
            </div>
        </>
    );
}
