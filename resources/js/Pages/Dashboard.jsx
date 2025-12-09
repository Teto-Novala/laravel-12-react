import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head, Link } from "@inertiajs/react";
import { Button } from "@/Components/ui/button";
import axios from "axios";

export default function Dashboard() {
    return (
        <AuthenticatedLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800">
                    Dashboard
                </h2>
            }
        >
            <Head title="Dashboard" />

            <div className="py-12">
                <Button asChild>
                    <a href={route("template.export.pdf")}>Export PDF</a>
                </Button>
                <Button asChild>
                    <a href={route("template.export.excel")}>Export Excel</a>
                </Button>
            </div>
        </AuthenticatedLayout>
    );
}
